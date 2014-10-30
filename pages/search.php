<?php
include('components/messages.php');
$title=$_GET['searchRequest'];
$activeLink="";
$activeSubLink="";
class SearchResult
{
    public $imgLink = "/images/no_image.png";
    public $title = "No title";
    public $description = "No description";
    public $cost = "1000";


    function SearchResult($imgLink, $title, $description, $cost)
    {
        $this->imgLink = $imgLink;
        $this->title = $title;
        $this->description = $description;
        $this->cost = $cost;
    }
}
$content = '
<p>Результаты поиска: '.$_GET["searchRequest"].'</p>
<table style="width: 100%">
  <thead>
    <tr>
      <th>'.MSGoffer.'</th>
      <th>'.MSGofferTitle.'</th>
      <th>'.MSGofferDescription.'</th>
      <th>'.MSGofferCost.'</th>
    </tr>
  </thead>
  <tbody>
';
$searchResults = array(
    new SearchResult("/images/balloons/balloon_light.jpeg", "Круглый Шар", "Описание круглого шара", 10000),
    new SearchResult("/images/balloons/balloon_light.png", "Cветящийся шар", "Описание светящегося шара", 15000),
    new SearchResult("/images/balloons/balloon_round.png", "Круглый Шар", "Описание круглого шара", 14000),
);

foreach ($searchResults as $value)
{
    $content .= '<tr>';
    $content .= '<td>';
    $content .= '<a class="th" href="'.$value->imgLink.'">';
    $content .= '<img class="search-image" src="'.$value->imgLink.'">';
    $content .= '</a>';
    $content .= '</td>';
    $content .= '<td>'.$value->title.'</td>';
    $content .= '<td>'.$value->description.'</td>';
    $content .= '
        <td>
            <div class="row">
                <div class="small-12">'
                    .$value->cost.
                '</div>
                <div class="small-12">
                    <a href="#" class="button">'.MSGdoOrder.'</a>
                </div>
            </div>
        </td>';
    $content .= '</tr>';
}
$content .= '</tbody></table>';
$content .= '
    <ul class="pagination">
      <li class="arrow unavailable"><a href="">&laquo;</a></li>
      <li class="current"><a href="">1</a></li>
      <li><a href="">2</a></li>
      <li><a href="">3</a></li>
      <li><a href="">4</a></li>
      <li class="unavailable"><a href="">&hellip;</a></li>
      <li><a href="">12</a></li>
      <li><a href="">13</a></li>
      <li class="arrow"><a href="">&raquo;</a></li>
    </ul>
';
include('components/template.php');
?>