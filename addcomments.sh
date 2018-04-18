#add to elasticsearch

comments="$1"
name="$2"

first="curl -XPOST 'localhost:9200/comments/_doc?pretty&pretty' -H
'Content-Type: application/json' -d'
{
 \"comments\":\"$comments\",
  \"name\":\"$name\"
}
'"


eval $first