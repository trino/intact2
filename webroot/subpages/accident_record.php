 <?php
 if($this->request->session()->read('debug'))
        echo "<span style ='color:red;'>" . __FILE__ . " #INC154</span>";
 ?>
<div>
<div class="form-group col-md-12">
                <label class="control-label col-md-6">Date : </label>
                <div class="col-md-6">
					<input type="text" class="form-control date-picker datepicker" name="date_of_accident[]"/>
				</div>
            </div>
            
            <div class="form-group col-md-12">
                <label class="control-label col-md-6">Nature of Accident(Head-On, Rear-End, Upset, etc.) : </label>
                <div class="col-md-6">
					<textarea class="form-control" name="nature_of_accident[]"></textarea>
				</div>
            </div>
            
            <div class="form-group col-md-12">
                <label class="control-label col-md-6">Fatalities : </label>
                <div class="col-md-6">
					<textarea class="form-control" name="fatalities[]"></textarea>
				</div>
            </div>
            
            <div class="form-group col-md-12">
                <label class="control-label col-md-6">Injuries : </label>
                <div class="col-md-6">
					<textarea class="form-control" name="injuries[]"></textarea>
				</div>
            </div>
            
            <div class="clearfix"></div>
            <hr />
                <a class="delete_acc_record btn red">Delete</a>
            
            <div class="clearfix"></div>
            <hr />
            </div>
            