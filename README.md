# SuperQbit

## Salesforce Trailhead ScoreCard
Salesforce Trailhead Scorecard and JSON data

Get your username from trailhead profile page URL which would look something like this https://trailhead.salesforce.com/me/{TrailheadUserName}

use the following URL for JSON data
```
https://api-superqbit.herokuapp.com/getTrailheadJSON/{TrailheadUserName}
```

use the following URL for Score Card
```
https://api-superqbit.herokuapp.com/getTrailheadCard/{TrailheadUserName}
```

To get embed the scorecard in your own website
```
<iframe src="https://api-superqbit.herokuapp.com/getTrailheadCard/{TrailheadUserName}" style="border:none;overflow:hidden;" width="100%" height="322px" scrolling="no"></iframe>
```


