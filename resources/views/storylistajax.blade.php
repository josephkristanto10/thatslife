<?php

$index = 1;

?>
<div class="row">
    @foreach($allstory as $key => $as)
    <?php if($index == 4 )
{ echo "</div><div class = 'row'>";}
?>
    <div class="col-md-4 card-container">
        <div class="card-flip">
            <div class="card front">
            <?php $myassets =  asset('gambarstory/'.$as->image);?>
                <img src="  <?= $myassets ?>" style="height:250px;"
                    class="card-img-top img-fluid">
                <div
                    style="position:absolute;right:20px;top:20px;font-size:10px;font-weight:bold;background-color:#BF9456;color:white;border-radius:10px;width:125px;height:20px; padding-top:2px; ">

                    {{ date('d F Y', strtotime($as->created_at))}}
                </div>
                <div class="card-block"
                    style="text-align:left;padding:5px;height:50px !important;">
                    <div style="height:50px !important;">
                        <div style="float:left;line-height:28px;"><span
                                style="font-weight:bold;"> {{$as->title}}</span><br>
                            <!-- <span style="font-size:14px;">16th Dec
                    2020</span> -->

                            <span style="color:#3aa322 !important;font-size:13px;"><img
                                    class="bd-placeholder-img card-img-top"
                                    style="color:#3aa322;width:18px;height:18px;float:left;margin-top:6px;"
                                    src="{{asset('res/newimage/pin.png')}}">
                                    {{$as->city}}, {{$as->country}}<br></span>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End Card 2 Front -->

            <!-- Card 2 Back -->
            <div class="card back" style="padding:10px;">
                <div class="card-header"
                    style="background-color:#303030;color:white;font-size:14px;">
                    {{$as->title}}
                </div>
                <div class="card-block">
                    <br>

                    <p class="card-text"
                        style="font-size:12px;text-align:justify;padding:5px;">
                        {{Str::limit($as->description,300)}} </p>
                    <?php
                    $urlid = $as->id;
                    $destination = URL::to('/detailstory/'.$urlid);
                    ?>
                    <a href="<?php echo $destination;?>" class="btn btn-primary"
                        style="font-size:12px;background-color:#e3a405;border:0px solid black;">Explore
                        This Story &nbsp <i class="bi bi-send"></i></a>
                </div>
            </div>
            <!-- End Card 2 Back -->
        </div>
    </div>
    <?php if($index == 4 )
{ 
  $index = 1;   
}
else
{
    $index++;
}
?>


    @endforeach
    <br />

    <div style = "width:100%;text-align:center;margin-top:30px;">
        {{ $allstory->links() }}
    </div>
</div>