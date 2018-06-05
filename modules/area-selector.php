<?php 
    //Include DB Connection
    include 'scripts/db_connection.php';
    $selectAreaQuery = "SELECT * FROM `location`";
    $selectAreaResult = $conn-> query($selectAreaQuery);
?>
<form class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="My location is...." list="area">

            <datalist id="area">
                <?php
                if ($selectAreaResult->num_rows > 0) {
                    // output data of each row
                    while($selectAreaData = $selectAreaResult->fetch_assoc()) {
                ?>
        				<option value="<?=$selectAreaData['area_name']; ?> - <?=$selectAreaData['city']; ?>">
                <?php
                        }
                    }
                ?>
      			</datalist> 
        </div>
    </div>
    <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-lg">Search food</button>
</form>