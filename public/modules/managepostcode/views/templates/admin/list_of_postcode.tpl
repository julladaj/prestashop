<div class="row">
<div class="container">

   <table class="table ">
      <thead>
         <tr>
            <th>{l s="Postleitzahl"}</th>
            <th>{l s="Stadtname"}</th>
            <th>{l s="Erstellt am"}</th>
            <th></th>
         </tr>
      </thead>
      <tbody>

      {foreach $postalcode_list as $items }
      <tr>
         <td>{$items.postalCode|escape:string}</td>
         <td>{$items.cityName|escape:string}</td>
         <td>{$items.create_date|escape:string}</td>
         <td>
         <form action="" method="get" >
            <input type="hidden" name="id" value="{$items.id}">
            <input type="hidden" name="controller" value="AdminManagePostcode">
            <input type="hidden" name="formDeleteToken" value="{Tools::getAdminToken('AdminManagePostcode')}">
            <input type="hidden" name="token" value="{Tools::getValue('token')}">
            <button name="deletePostalCode" class="btn btn-danger btn-sm" title="delete">x</button>
         </form>
         </td>
      </tr>
      {/foreach}
      </tbody>
   </table>


</div>
</div>