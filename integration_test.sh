#/bin/bash
if curl -o /dev/null --silent --head --write-out '%{http_code}\n' http://beta.cbot.ml/index.php | grep -q "200"; then
	echo "Passed Integration Test"
	exit 0
else 
	echo "Failed Integration Test"
	exit 1
fi

