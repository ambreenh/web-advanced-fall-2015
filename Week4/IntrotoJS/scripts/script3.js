/* Getting images by tag
var feed = new Instafeed({
        get: 'tagged',
        tagName: 'awesome',
        clientId: 'YOUR_CLIENT_ID'
    });
    feed.run();
*/


/* Getting images by user
var userFeed = new Instafeed({
    get: 'user',
    userId: 1234567,
    accessToken: 'YOUR_ACCESS_TOKEN'
});
userFeed.run();
*/

/*
Get images by location
var feed = new Instafeed({
    clientId: '3a7acfb1babd47128d93a2cb21e7d32d',
    get: 'location',
    locationId: 2862169
});
feed.run();
*/

/*
var tag1Feed = new Instafeed({
    target: 'tag1Feed',
    get: 'tagged',
    tagName: 'yoga',
    clientId: '3a7acfb1babd47128d93a2cb21e7d32d',
});
var tag2Feed = new Instafeed({
    target: 'tag2Feed',
    get: 'tagged',
    tagName: 'running',
    clientId: '3a7acfb1babd47128d93a2cb21e7d32d',
});

// run both feeds
tag1Feed.run();
tag2Feed.run();

// your html should then be updated from 
<div id="instafeed"></div> 
to 
<div id="tag1Feed"></div> 
<div id="tag2Feed"></div>
*/


function getMultipleTags (tags) {
    var feeds = [];
    for (var i=0, len=tags.length; i < len; i++) {
        feeds.push(new Instafeed({
            get: 'tagged',
            tagName: tags[i],
            target: "instafeed-" + tags[i]
        }));
    }
    return feeds;
}

// get multiple tags
var myTags = getMultipleTags(['new york', 'paris', 'london']);
// run each instance
for(var i=0, len=myTags.length; i < len; i++) {
    myTags[i].run();
}
