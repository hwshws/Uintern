
<a class="card" href="?download=Vertretungsplan.docx">
    <i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i>
    <hr/>
    <p>SJ 14/15</p>
</a>

<a class="card" href="?download=Vertretungsplan.docx">
    <i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i>
    <hr/>
    <p>SJ 15/16</p>
</a>

<a class="card" href="?download=Vertretungsplan.docx">
    <i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i>
    <hr/>
    <p>SJ 16/17</p>
</a>

<a class="card" href="?download=Vertretungsplan.docx">
    <i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i>
    <hr/>
    <p>SJ 17/18</p>
</a>

<?php
$files = glob("img/Chronik/SJ_14-15/*.*");
for ($i=0; $i<count($files); $i++)
{
    $image = $files[$i];
    $supported_file = array(
        'gif',
        'jpg',
        'jpeg',
        'png'
    );

    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
        echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
        echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
    } else {
        continue;
    }
}
?>


