<!DOCTYPE html>
<html>
<?php include '/app/_includes/head.php'; ?>
<body>
<?php include '/app/_includes/headerMain.php'; ?>
<div class="row">
  <div class="small-12 columns">
    <h2 class="header">
      Our Mission
    </h2>
    <p style="color: white;">
      We exist to create an environment where everyone in the Michigan Tech
      community is encouraged and supported to make by providing a welcoming
      space, learning opportunities, a maker network, and resources.
    </p>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <h2 class="header">
      About the Space
    </h2>
    <div class="list-item">
      <div class="list-item__icon">
        <i class="fa fa-map-marker"></i>
      </div>
      <div class="list-item__text">
        <p>
          Located in the MUB Basement
        </p>
      </div>
    </div>

    <div class="list-item">
      <div class="list-item__icon">
        <i class="fa fa-clock-o"></i>
      </div>

    <div class="list-item__text">
    <!--TODO: implement text entry form entry for hours on the Web app-->
		<table class="list-item__table">
			<tr>
				<th></th>
				<th></th>
			</tr>
      <!--<tr>
				<td>CLOSED For Break</td>
				<td></td>
			</tr>-->
		  <tr>
				<td>Monday:&nbsp </td>
				<td>3:00 - 9:00 pm</td>
			</tr>
			<tr>
				<td>Tuesday:&nbsp </td>
				<td>3:00 - 9:00 pm</td>
			</tr>
      <tr>
				<td>Wednesday:&nbsp</td>
				<td>3:00 - 9:00 pm</td>
			</tr>
      <tr>
				<td>Thursday:&nbsp </td>
				<td>3:00 - 9:00 pm</td>
			</tr>
			<tr>
				<td>Friday:&nbsp </td>
				<td>CLOSED</td>
			</tr>
			<tr>
				<td>Saturday:&nbsp </td>
				<td>CLOSED</td>
			</tr>
			<tr>
				<td>Sunday:&nbsp </td>
				<td>CLOSED</td>
			</tr>
    </table>
    </div>
  </div>

    <div class="list-item">
      <div class="list-item__icon">
        <i class="fa fa-money"></i>
      </div>

      <div class="list-item__text">
        <p>
          No cost for Michigan Tech students, faculty, and staff
        </p>
      </div>
    </div>

    <div class="list-item">
      <div class="list-item__icon">
        <i class="fa fa-wrench"></i>
      </div>

      <div class="list-item__text">
        <p>
          Tools and equipment available to use for 3D printing, woodworking,
          electronics, crafting, sewing, and more!
        </p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="row">
  <div class="small-12 columns">
    <h2 class="header">
      Our Sponsors
    </h2>
  </div>
</div>
<div class="row small-up-1 medium-up-2 large-up-3">
  <!-- Copy and paste this snippet to add another sponsor. Don't forget to add the image to `/img/sponsors/{sponsor-name}` and update the url
       TODO: implement form entry for sponsor images on the Web app-->
  <div class="column">
    <div class="sponsor__photo" style="background-image: url('/img/sponsors/milwaukee.jpg');"></div>
  </div>
  <!-- End Snippet -->
  <div class="column">
    <div class="sponsor__photo" style="background-image: url('/img/sponsors/kimberly-clark.jpg');"></div>
  </div>
    <div class="column">
    <div class="sponsor__photo" style="background-image: url('/img/sponsors/AlumniFriends_Black_Vertical.png');"></div>
  </div>
</div>
<!--section required for every layout-->
<?php require '/app/_includes/call_to_action.php';
      include '/app/_includes/footer.php';
?>
</body>
</html>
