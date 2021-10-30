<form action="{$actions}" method="post" enctype="multipart/form-data" class="form-horizontal">
   <div class="row">
      <div class="container ">
         <div class="form-group">
            <label class="col-2"> {$tmp_params.labels.postalcode|escape:string}</label>
            <input type="text" name="postalCode" class="form-control" maxlength="5" required>
         </div>
         <div class="form-group">
            <label class="col-2">{$tmp_params.labels.cityname|escape:string}</label>
            <input type="text" name="cityName" class="form-control" required>
         </div>
         <div class="form-group">
            <label class="col-2"></label>
            <button class="btn btn-success" name="{$tmp_params.form.action}">{$tmp_params.form.submit|escape:string}</button>
            <input type="hidden" name="formToken" value="{$tmp_params.form.formToken}">
         </div>
      </div>
   </div>
</form>
