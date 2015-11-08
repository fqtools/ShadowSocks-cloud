<!DOCTYPE html>
<html lang="en" >
   @include('tree.head')
   @include('tree.bottom')
<body>
<div class="app app-header-fixed ">
    @include('home.navbar')
    @include('home.asid')
  <!-- content -->
  <div id="content" class="app-content" role="main">
  	<div class="app-content-body ">
	    

<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false; 
    app.settings.asideDock = false;
  ">
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Shadowsocks-cloud</h1>
         
        </div>
  
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">


      <!-- service -->
      <div class="panel hbox hbox-auto-xs no-border">
        <div class="col wrapper">
          <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
          <h4 class="font-thin m-t-none m-b-none text-primary-lt">服务器负载</h4>
          <span class="m-b block text-sm text-muted">服务器状态更新于1分钟前</span>
          <div ui-jq="plot" ui-options="
            [
              { data: [ [1,5.5],[2,6.5],[3,7],[4,8],[5,7.5],[6,7],[7,6.8],[8,7],[9,7.2],[10,7],[11,6.8],[12,7],[13,2.5],[14,3.5],[15,7],[16,7],[17,6],[18,7],[19,6.8],[20,5],[21,7],[22,8],[23,6.8],[24,7] ], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ], 
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }
          " style="height:240px" >
          </div>
        </div>
        <div class="col wrapper-lg w-lg bg-light dk r-r">
          <h4 class="font-thin m-t-none m-b">服务器报告</h4>
          <div class="">
            <div class="">
              <span class="pull-right text-primary">60%</span>
              <span>服务器已使用人数</span>
            </div>
            <div class="progress progress-xs m-t-sm bg-white">
              <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="60%" style="width: 60%"></div>
            </div>
            <div class="">
              <span class="pull-right text-info">35%</span>
              <span>流量已使用情况</span>
            </div>
            <div class="progress progress-xs m-t-sm bg-white">
              <div class="progress-bar bg-info" data-toggle="tooltip" data-original-title="35%" style="width: 35%"></div>
            </div>
            <div class="">
              <span class="pull-right text-warning">25%</span>
              <span>服务器内存使用情况</span>
            </div>
            <div class="progress progress-xs m-t-sm bg-white">
              <div class="progress-bar bg-warning" data-toggle="tooltip" data-original-title="23%" style="width: 25%"></div>
            </div>
          </div>
      
        </div>
      </div>
      <!-- / service -->

      <!-- tasks -->
      <div class="panel wrapper">
        <div class="row">
          <div class="col-md-6 b-r b-light no-border-xs">
            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
            <div class=" m-b">
              <div class="m-b">
                <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                <a href>Feed cat</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                <a href>Fishing Time</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                <a href>Kick-off meeting</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                <a href>Morning running</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="row row-sm">
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-primary h4">75%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
              </div>
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-info h4">50%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Started</div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <!-- / tasks -->

      <!-- tasks -->
      <div class="row">
        <div class="col-md-6">
          <div class="panel no-border">
            <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
              <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>              
            </div>
            <ul class="list-group list-group-lg m-b-none">
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a1.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                <a href>Damon Parker</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a2.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-info inline m-t-sm">Member</span>
                <a href>Joe Waston</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a3.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Jannie Dvis</a>
              </li>
              <li class="list-group-item">
                <a href class="thumb-sm m-r">
                  <img src="img/a4.jpg" class="r r-2x">
                </a>
                <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                <a href>Emma Welson</a>
              </li>
            </ul>
            <div class="panel-footer">
              <span class="pull-right badge badge-bg m-t-xs">32</span>
              <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add Teammate</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">            
          <div class="list-group list-group-lg list-group-sp">
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have discussed</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
            </a>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
              <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- / tasks -->
    </div>
  </div>
  <!-- / main -->

</div>



	</div>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">2.0.3 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2015 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>
</body>
</html>
