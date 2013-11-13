<h2>View Medicine</h2>
      <div class="col-md-8">
      		<table  class="table table-condensed">

                <tr> 
                    <th class="allergy-header">Name: </th>
                    <td><?php echo $medicine['Medicine']['medicine_name']; ?></td>
                </tr>
                <tr> 
                    <th class="allergy-header">Min_dose: </th>
                    <td><?php echo $medicine['Medicine']['min_dose']; ?></td>
                </tr>
                <tr> 
                    <th class="allergy-header">Max_dose: </th>
                    <td><?php echo $medicine['Medicine']['max_dose']; ?> </td>
                </tr>

                <tr>
                     <th class="allergy-header">Units:</th>
                <td><?php echo $medicine['Medicine']['units']; ?>  </td>
                </tr>

                <tr>
                    <th class="allergy-header">Hypo: </th>
                    <td><?php echo $medicine['Medicine']['hypo']; ?> </td>
                </tr>
                
                <tr>
                     <th class="allergy-header">Weight:</th>
                <td><?php echo $medicine['Medicine']['weight']; ?>  </td>
                </tr>

                <tr>
                    <th class="allergy-header">Renal_gu: </th>
                    <td><?php echo $medicine['Medicine']['renal_gu']; ?> </td>
                </tr>

 				<tr>
                    <th class="allergy-header">Gi_sx: </th>
                    <td><?php echo $medicine['Medicine']['gi_sx']; ?> </td>
                </tr>

                 <tr>
                    <th class="allergy-header">Chf: </th>
                    <td><?php echo $medicine['Medicine']['chf']; ?> </td>
                </tr>

                 <tr>
                    <th class="allergy-header">Cvd: </th>
                    <td><?php echo $medicine['Medicine']['cvd']; ?> </td>
                </tr>

                 <tr>
                    <th class="allergy-header">Bone: </th>
                    <td><?php echo $medicine['Medicine']['bone']; ?> </td>
                </tr>
                
        </table>
        
       <div style="padding:5px; display: inline-block;">
            <a href="/medicines/edit" class="btn btn-primary" style="padding:5px;"><span class="glyphicon glyphicon-trash"></span> Update Medicine</a>
      </div>
      <div style="padding:5px; display: inline-block;">
            <a href="/medicines/delete" data-confirm="Do you want to delete this medicine record?" data-method="delete" class="btn btn-primary" style="padding:5px;"><span class="glyphicon glyphicon-trash"></span> Delete Medicine</a>
      </div>        
    </div>

    <script>
  $('.btn-update-patient').click(function () {
    window.location.href = '/patients/edit';
    });//end .click
    $('.btn-delete-patient').click(function () {
      var result = confirm("Are you sure you want to delete this patient?");
      if (result==true) {
         
          window.location.href = '/patients/delete';
      }
    });//end .click
    </script>