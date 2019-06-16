# SuperQbit - Salesforce Trailhead Public API and UI ScoreCard


![alt text](https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/Screenshots/trailhead_Badge.png)
## Salesforce Trailhead Public API and UI ScoreCard
Salesforce Trailhead Scorecard and JSON data

Get your username from trailhead profile page URL which would look something like this
https://trailhead.salesforce.com/me/{TrailheadId}

![alt text](https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/Screenshots/trailheadProfile.png)

use the following URL for Salesforce Trailhead Public API data
```
https://api-superqbit.herokuapp.com/salesforce/TrailheadJSON/{TrailheadId}
```

use the following URL for Score Card
```
https://api-superqbit.herokuapp.com/salesforce/TrailheadCard/{TrailheadId}
```

use the following URL for Complete Salesforce Trailhead Profile
```
https://api-superqbit.herokuapp.com/salesforce/TrailheadProfile/{TrailheadId}
```

To get embed the scorecard in your own website
```
<iframe src="https://api-superqbit.herokuapp.com/salesforce/TrailheadCard/{TrailheadId}" style="border:none;overflow:hidden;" width="100%" height="350px" scrolling="no"></iframe>
```


