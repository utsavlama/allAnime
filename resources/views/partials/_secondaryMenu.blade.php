<div class = "ui container secondaryMenu">
    <!--secondary menu-->
    <div class="ui borderless pointing fluid three item menu">
        <div class = "item {{ Request::is('/') ? 'active' : ''}}"><a href = '/'>Home</a></div>
        <div class = "item"><a href = "">Most Popular</a></div>
        <div class = "item"><a href = "">Favourites</a></div>
    </div><!--secondary menu-->

</div>

<!--dropdown initialization-->
<script type = "text/javascript">

    $('.ui.dropdown')
        .dropdown()
    ;         

</script><!--dropdown initialization-->