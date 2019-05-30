connect = dbConnect(MySQL(), user = 'root', password='', dbname='ims_test', host='localhost')


select = dbSendQuery(connect, "SELECT B.DATE_ACQUIRED - A.DATE_PUR AS NO_OF_DAYS_DELIVERED
,c.SUP_NAME, D.COSTZ
FROM requisition AS A
INNER JOIN acquisition AS B
ON B.REQ_ID = A.REQ_ID
INNER JOIN supplier as C
on A.SUPPLIER = C.SUP_ID
INNER JOIN item AS D
ON A.ITEM_ID = D.ITEM_ID
GROUP BY c.SUP_NAME
")


selecdf = fetch(select)

select2 = dbSendQuery(connect, "SELECT B.DATE_ACQUIRED - A.DATE_PUR AS NO_OF_DAYS_DELIVERED
,c.SUP_NAME, D.COSTZ
FROM requisition AS A
INNER JOIN acquisition AS B
ON B.REQ_ID = A.REQ_ID
INNER JOIN supplier as C
on A.SUPPLIER = C.SUP_ID
INNER JOIN item AS D
ON A.ITEM_ID = D.ITEM_ID
WHERE a.REQ_ID IN (
    SELECT MAX(A.REQ_ID)
FROM requisition AS A
INNER JOIN acquisition AS B
ON B.REQ_ID = A.REQ_ID
INNER JOIN supplier as C
on A.SUPPLIER = C.SUP_ID
INNER JOIN item AS D
ON A.ITEM_ID = D.ITEM_ID
GROUP BY C.SUP_NAME)
GROUP BY C.SUP_NAME
")


selecdf2 = fetch(select2)


supplier = selecdf[,-c(1,3)]

cost = as.matrix(selecdf[c(0,3)])
days = as.matrix(selecdf[c(0,1)])



relation = lm(cost~days)


#selecdf$resultsss <- result OR
selecdf[,"Excpected Days of Deliver"] = result

result = predict(relation, selecdf2)



km2 <- kmeans(selecdf[,-c(0,2)],2)


saveGIF({
    set.seed(2345) 
    library(jsonlite)
    library(animation)
    kmeans.ani(selecdf[,-c(0,2)], 2)
    with(selecdf,text(main="Sample",selecdf$COSTZ ~ selecdf$NO_OF_DAYS_DELIVERED , labels=selecdf$SUP_NAME,pos=4, cex=0.5))
    title("This is my title")
}, movie.name = "C://xampp//htdocs//JSPIMS//admin//assets//img//user//animation.gif")

png(filename="C://xampp//htdocs//JSPIMS//admin//template//cluster2.png", width=480, height=480)
set.seed(2345) 
library(jsonlite)
library(animation)
kmeans.ani(selecdf[,-c(0,2)], 2)
with(selecdf, text(selecdf$COSTZ ~ selecdf$NO_OF_DAYS_DELIVERED , labels=selecdf$SUP_NAME,pos=4, cex=0.5))
title("Supplier Performance: Days and Cost")
dev.off()


b1 <-subset(selecdf, km2$cluster == 1)
b2 <-subset(selecdf, km2$cluster == 2)

merged <- rbind(b2,b1)

toJSON(merged, pretty=TRUE)



#plot( cost,days, col="blue", main="Days and Cost Regression", abline(lm(days~cost)),cex=1.3,pch=16)
