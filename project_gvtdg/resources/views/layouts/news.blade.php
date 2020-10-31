 <style>
     .pagination{
       padding-left: 30px;
        margin-left: 5px;
        list-style: none;
     }
    .toggle-box {
  display: none;
}

.toggle-box + label {
  cursor: pointer;
  display: block;
  font-weight: bold;
  line-height: 21px;
  margin-bottom: 5px;
}

.toggle-box + label + div {
  display: none;
  margin-bottom: 10px;
}

.toggle-box:checked + label + div {
  display: block;
}

.toggle-box + label:before {
  background-color: #4F5150;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  color: #FFFFFF;
  content: "+";
  display: block;
  float: left;
  font-weight: bold;
  height: 20px;
  line-height: 20px;
  margin-right: 5px;
  text-align: center;
  width: 20px;
}

.toggle-box:checked + label:before {
  content: "\2212";
}
 </style>
  <div class="col-xs-12 col-sm-12  col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h1><b>Tin tức</b></h1>
                    </div>


                    @foreach($listNews as $lt)
                    <div class="row-item row" style="
                        border-width: 1px;
                        border-color: #e2e2e2;
                        border-radius: 2px;
                        border-bottom-style: solid;
                        padding: 16px!important;">

                        <div class="col-md-3">

                            <a href="#">
                                <br>
                                <img  style="width:auto;height:auto;" class="img-responsive" src="{!!$lt->news_img!!}" alt=""></a>
                        </div>

                        <div class="col-md-9">
                            <h2>{!!$lt->news_name!!}</h2>
                            <input class="toggle-box" id="identifier-1" type="checkbox" >
                                <p>{!!$lt->news_sort_content!!}<label for="identifier-1"></label>...(more)</p>
                                <div>{!!$lt->news_content!!}</div>
                                                          
                        </div>
                        <div class="break"></div>
                    </div>

                    @endforeach
                    <div class="row" style="float: center;">{{$listNews->links()}}</div>