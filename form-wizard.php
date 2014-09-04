<?php require_once('./init.php');  ?>
<?php require_once(ABSPATH.'controllers/login.php');  ?>
<?php require_once('header.php'); ?>
</head>
<body>
<div class="container">
	<div class="row">
		<h2>Input Validation + Colorful Input Groups</h2>
	</div>
    
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <form method="post">
				<div class="form-group">
        			<label for="validate-text">Validate Text</label>
					<div class="input-group">
						<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
				<div class="form-group">
        			<label for="validate-optional">Optional</label>
					<div class="input-group">
						<input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
						<span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
				</div>
    			<div class="form-group">
        			<label for="validate-optional">Already Validated!</label>
    				<div class="input-group">
						<input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" value="Validated!" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
				<div class="form-group">
        			<label for="validate-email">Validate Email</label>
					<div class="input-group" data-validate="email">
						<input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Validate Email" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
    			<div class="form-group">
        			<label for="validate-phone">Validate Phone</label>
					<div class="input-group" data-validate="phone">
						<input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
        		<div class="form-group">
        			<label for="validate-length">Minimum Length</label>
					<div class="input-group" data-validate="length" data-length="5">
						<textarea type="text" class="form-control" name="validate-length" id="validate-length" placeholder="Validate Length" required></textarea>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
                <div class="form-group">
            		<label for="validate-select">Validate Select</label>
					<div class="input-group">
                        <select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>
                            <option value="">Select an item</option>
                            <option value="item_1">Item 1</option>
                            <option value="item_2">Item 2</option>
                            <option value="item_3">Item 3</option>
                        </select>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
            	<div class="form-group">
        			<label for="validate-number">Validate Number</label>
					<div class="input-group" data-validate="number">
						<input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
				</div>
                <button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>
            </form>
        </div>
    </div>
</div>

                                                        
<?php require_once('footer.php'); ?>
