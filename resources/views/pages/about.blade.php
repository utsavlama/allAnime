<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="{{ URL::asset('css/masterCss.css') }}" rel="stylesheet" type="text/css">
        
        
    </head>
    <body>
        <div class="ui menu">
              <div class="header item">Brand</div>
              <a class="active item">Link</a>
              <a class="item">Link</a>
              <div class="ui dropdown item" tabindex="0">
                    Dropdown
                    <i class="dropdown icon"></i>
                    <div class="menu" tabindex="-1">
                          <div class="item">Action</div>
                          <div class="item">Another Action</div>
                          <div class="item">Something else here</div>
                          <div class="divider"></div>
                          <div class="item">Separated Link</div>
                          <div class="divider"></div>
                          <div class="item">One more separated link</div>
                    </div>
              </div>
              <div class="right menu">
                <div class="item">
                      <div class="ui action left icon input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search">
                            <button class="ui button">Submit</button>
                      </div>
                </div>
                <a class="item">Link</a>
              </div>
        </div>
    </body>
</html>
