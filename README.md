# SuperQbit - Salesforce Trailhead Public API and UI ScoreCard - Updated 2021


![alt text](https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/wp-scorecard-widget-for-salesforce-trailhead/assets/screenshot-1.png)
## Salesforce Trailhead and Certifications Public API and UI ScoreCard
Salesforce Trailhead Scorecard and JSON data

1. Get your username from trailhead profile page URL which would look something like this
https://trailblazer.me/id/{username}

![alt text](https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/wp-scorecard-widget-for-salesforce-trailhead/assets/screenshot-2.png)

2. Get your Trailhead Id from this url, pass your trailhead username in the paramater, example:
```
https://www.superqbit.com/trailhead?name=abhimanyudx
```
![alt text](https://raw.githubusercontent.com/abhimanyud3dx/Trailhead-Score-Card/master/wp-scorecard-widget-for-salesforce-trailhead/assets/screenshot-3.png)

3. use the following URL for Salesforce Trailhead Public API data
```
https://superqbit.com/api/v1/trailhead/005........
```

4. use the following URL for Score Card
```
https://superqbit.com/trailhead?uid=005........&type=a&size=150
```
Type Parameter
```
a = TrailHead Info
b = Certifications
b1 = Certifications without Title
b2 = Certifications  without Date
b12 = Certifications without Title &amp; Date
c = TrailHead &amp; Certifications 
c1 = TrailHead &amp; Certifications without Title 
c2 = TrailHead &amp; Certifications without Date 
c12 = TrailHead &amp; Certifications without Title &amp; Date  
```

Size Parameter is the size for Certificate image size in Pixels.


5. To get embed the scorecard in your own website, you can use Embed Iframe Url
```
<iframe src="https://superqbit.com/trailhead?uid={TrailheadId}&type=c12" style="border:none;overflow:hidden;" width="100%" height="350px" scrolling="no"></iframe>
```


