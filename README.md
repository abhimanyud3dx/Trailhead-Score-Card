# SuperQbit

## Salesforce Trailhead ScoreCard
Salesforce Trailhead Scorecard and JSON data

Get your username from trailhead profile page URL which would look something like this https://trailhead.salesforce.com/me/{TrailheadUserName}

use the following URL for JSON data
```
https://api-superqbit.herokuapp.com/salesforce/TrailheadJSON/{TrailheadUserName}
```

use the following URL for Score Card
```
https://api-superqbit.herokuapp.com/salesforce/TrailheadCard/{TrailheadUserName}
```

To get embed the scorecard in your own website
```
<iframe src="https://api-superqbit.herokuapp.com/salesforce/TrailheadCard/{TrailheadUserName}" style="border:none;overflow:hidden;" width="100%" height="350px" scrolling="no"></iframe>
```


