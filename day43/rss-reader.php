<?php

function downloadNYTimesRSS()
{
    // downloads the code from NYtimes and puts it into a variable
    $contents = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml');

    // creates a file and outputs the variable into it
    file_put_contents('nytimes-rss.xml', $contents);

    // so now we have the file 'nytimes-rss.xml' containing the source code of 'http://rss.nytimes.com/services/xml/rss/nyt/World.xml'
}

// if the "cache" file does not exist
if(!file_exists('nytimes-rss.xml'))
{
    // download it from NYTimes
    downloadNYTimesRSS();
}

// reads the contents of the local file and puts it into a variable
$contents = file_get_contents('nytimes-rss.xml');

// check if everything is OK
//var_dump($contents); // commented-out in favour of HTML output below

// read the string and form a SimpleXMLElement object out of it
$simplexml_object = simplexml_load_string($contents);

// var_dump the name of the root element (<rss> element, so 'rss')
//var_dump($simplexml_object->getName()); // commented-out in favour of HTML output below

// var_dump <channel>
//var_dump($simplexml_object->channel); // commented-out in favour of HTML output below

// var_dump first <item> within <channel>
//var_dump($simplexml_object->channel->item); // commented-out in favour of HTML output below

foreach($simplexml_object->channel->item as $one_item)
{
    //var_dump($one_item->title);
    // $one_item   ==   <item></item>
    // $one_item->title   ==   <title></title> within <item>
    // (string)$one_item->title   ===    contents of <title></title>

    $contents = (string)$one_item->title;
    // echo $contents.'<br />'; // commented-out in favour of HTML output below
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSS reader</title>

    <style>
body {
    font-family: Tahoma;
}
ol li {
    background-color: #e7e7e7;
    margin: 0.5em;
    padding: 0.5em;
}
    </style>
</head>
<body>
    
    <ol>
        <?php $number_displayed = 0; ?>
        <?php foreach($simplexml_object->channel->item as $one_item) : ?>
            <li>
                <?php
                    $children_of_item = $one_item->children('media', true);
                    $image = $children_of_item->content;
                ?>
                <?php if($image) : ?>
                    <img src="<?php echo $image->attributes()->url; ?>" />
                <?php endif; ?>
                <h3>
                    <a href="<?php echo $one_item->link; ?>">
                        <?php echo $one_item->title; ?></a>
                </h3>
                Published at: <time><?php echo $one_item->pubDate; ?></time>
            </li>
            <?php $number_displayed++; ?>
            <?php if($number_displayed >= 10) break; ?>
        <?php endforeach; ?>
    </ol>

</body>
</html>

