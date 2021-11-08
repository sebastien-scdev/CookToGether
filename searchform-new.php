<form role="search" method="post" class="form form-group" action="<?php echo home_url( '/' ); ?>">
    <div class="u-PaddingLeft10 u-PaddingRight10">
        <div class="input-group">
            <input type="search" required class="form-control" placeholder="Find" value="" name="s" title="Search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" style="padding: 5px 20px!important; height: 38px;">
                    ok
                </button>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <input type="hidden" name="search-type" value="general" />
</form>