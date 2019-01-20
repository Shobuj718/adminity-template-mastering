<div style=" margin-bottom: 10px;" class="col-sm-8 col-sm-offset-2 alert-danger">
    <p style="padding-bottom: 10px; padding-top: 10px;" class="text-center text-danger">{{Session::get('error')}}</p>
</div>
<?php

        Session::forget('error')
?>