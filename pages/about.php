<?php
include('components/messages.php');
$title = MSGaboutUs;
$activeLink = MSGaboutUs;
$content = '
<div class="row">
    <div class="small-12 columns text-center">
        <h3>' . MSGalterApplicationTitle . ' ' . MSGapplicationTitleQuotes . '</h3>
     </div>
</div>
<div class="row valign-middle">
    <div class="small-12 medium-4 large-3 columns text-center">
        <img class="home-image" src="/images/gift.png">
     </div>

     <div class="small-12 medium-4 large-6 columns text-center">
        <p class="text-center" >
            <br />
            <br />
            ' . MSGcontacts . '
            <br />
            ' . MSGvelcomPhone . '
            <br />
            ' . MSGmtsPhone . '
            <br />
            ' . MSGscheduleTitle . '
            <br />
            ' . MSGworkTime . '
            <br />
        ' . MSGwithoutWeekEnd . '
        </p>
        <p>
            Услуги тамады, аниматора
            (при предварительной записи):
                круглосуточно
                ' . MSGurl . '
        </p>
     </div>
     <div class="small-12 medium-4 large-3 columns text-center">
        <img class="home-image" src="/images/gift.png">
     </div>
</div>';
include('components/template.php');
?>
