<div style=" margin-bottom: 10px;" class="col-sm-8 col-sm-offset-2 alert-success">
    <h2 style="padding-bottom: 10px; padding-top: 10px; text-align:center;" class="text-center text-success">{{Session::get('success')}}</h2>
</div>

<?php

Session::forget('success');
?>