
<?php include("./session_start.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Titipin </title>
        <link rel="stylesheet" type="text/css" href="./style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font    /bootstrap-icons.css">
    
        <style>
            @import "https://unpkg.com/open-props";
            @import "https://unpkg.com/open-props/normalize.min.css";

            body {
            padding:  0 var(--_spacer) var(--_spacer);

            overflow-x: auto;
            overscroll-behavior-inline: contain;
            }

            .snaps-inline {
            scroll-snap-type: inline mandatory;
            scroll-padding-inline: var(--_spacer, 1rem);
            }
			
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
				-webkit-appearance: none;
				margin: 0;
			}
  
			input[type=number] {
				-moz-appearance: textfield;
			}
        </style>
    </head>
    
    <body> 
	<?php include("./header.php") ?>
	
	<div class = "card border-0" style = "background-color:#F7F7F7;">
		<br>
		<!-- Judul -->
		<div id = "daftar_cart" class = "card border-0 text-align-left" style = "width: 800px; margin: 0 auto; background-color:#F7F7F7;">
		<div class = "row">
			<div class = "card border-0 text-align-left" style = "width: 140px; background-color:#F7F7F7;">
				<a href="" class="fw mb-0" style="font-size:17px; color: #FC4C02;"> <strong> Cart Best Seller </strong> </a>
			</div>
			<!-- Link Cart Custom Link -->
			<div class = "card border-0 text-align-left" style = "width: 160px; background-color:#F7F7F7;">
				<a href="cart_custom_link.php" class="fw mb-0" style="text-decoration: none; font-size:17px; color: #B0B0B0;"> <strong> Cart Custom Link </strong> </a>
			</div>
			<!-- kosong -->
			<div class = "card border-0 text-align-left" style = "width: 500px; background-color:#F7F7F7;"> </div>
		</div>
		</div>		
		
		<div class = "card border-0" style = "width: 800px; margin: 0 auto; background-color:#F7F7F7;">
		<div class = "row">
			<!-- list barang cart -->
			<div id = "daftar_cart" class = "card" style = "width: 540px;">
			<br>
			
			<!-- NAMPILIN BARANG YANG ADA DI DATABASE pesanan user -->
			<?php 
			$query = "SELECT * FROM pesanan WHERE username ='".$username."'";
			$result = $db->query($query);
			$i = 1;
			while ($row = $result->fetch_object()) { ?>
			<div id = " <? echo $row->id_barang?>" class = "card border-0" style = "width: 500px; margin: 0 auto;">
			<div class = "row">
				<div class = "card border-0" style = "width: 100px;">
					<a href=""> <!-- link ke item description -->
					<?php 
						preg_match('([a-zA-Z]+[0-9]+)',$row->link_pembelian,$match);?>
						
						<?php                   
						preg_match('([a-zA-Z]{3})',$match[0],$match2);
						preg_match('(B[0-9]{2}[0-9A-Z]{7}|[0-9]{9}(?:X|[0-9]))',$row->link_pembelian,$matches);
						$ecommerce = $row->nama_ecommerce?>
						<?php if($ecommerce == "HBJ"){?>
							<img src="https://www.hlj.com/productimages/<?php echo( $match2[0] );?>/<?php echo( $match[0] );?>_0.jpg" alt="..." style="width:100px; height:90px;">
						<?php } ?>
                            
						<?php if($ecommerce == "Amazon"){?>
							<img src="https://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=<?php echo( $matches[0] );?>&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=SL250/>" alt="..." style="width:100px; height:90px;">
						<?php } ?>
					<!------------------------------------------------------------------------------------------------------------- GAMBAR -->
					</a>
				</div>
					
				<div class = "card border-0" style = "width: 190px;">
					<!-- status -->
					<button style = "font-size: 10px; width: 75px;
					<?php 
						//-------------------------------------------------------------------------------------------------------------------> STATUS
						$status = $row -> status;
						if ($status == "Ready Stock"){
							echo 'background-color: #77F292;';
						}
						else  {
							echo 'background-color: #ad77f2;';
						}
					?> 
					color: white; border-radius: 8px;" disabled> <?php echo $row->status ?> </button>
					<a href= "#" style="text-decoration: none; font-family:'Nunito';font-size:10px;color:black;"> <strong> <?php echo $row->nama_produk ?> </strong> </a>
					<label id = "<?php echo "hrg".strval($i)?>" style="font-family:'Nunito';font-size:20px;color:#FC4C02;" value = "<?php echo (($row->harga)*15000)?>"> <strong> <?php $harga = (($row->harga)*15000); echo "Rp ". number_format($harga, 0, ".", ".")."<br />"; ?></strong> </label>
					
					<!--------------------------------------------------------------------------------------------------------------------------------- tempat sampah -->
					<div class = "card border-0" style = "width: 24px;">
						<a href = "del_item.php?id=<?php echo $row->id_barang ?>"> <img src="assets/trash.png" style="width:30p; height:30px;"> </a>
					</div>
				</div>
					
				<div class = "card border-0" style = "width: 100px; margin: 0 auto;">
					<div class = "text-center">
						<label style="font-family:'Nunito'; font-size:10px; color: black;"> <strong> Quantity </strong> </label> <br>
						<!----------------------------------------------------- tombol + -->
						<a href = "dec_item.php?id=<?php echo $row->id_barang ?>"> <button type="button" style = "font-size: 13px; color: #d9d9d9; background-color: white; border: none; border-radius: 0px; height: 20px; width: 20px; !important"> <strong> - </strong> </button> </a>
							
						<!------------------------------------------------------ display angka -->
						<input type="number" min = "1" max = "100" size="5" id="<?php echo "c".strval($i)?>" value = "<?php echo $row->quantity ?>" style = "background-color: white; border-radius: 0px; height: 20px; width: 25px; !important" disabled />
							
						<!------------------------------------------------------ tombol - -->	
						<a href = "inc_item.php?id=<?php echo $row->id_barang ?>"> <button type="button" style = "font-size: 13px; color: #FC4C02; background-color: white; border: none; border-radius: 0px; height: 20px; width: 20px !important"> <strong> + </strong> </button> </a>
					</div>
				</div>

				<div class = "card border-0" style = "width: 125px;">
					<div style = "text-align:right;"> 
					<label style="font-family:'Nunito'; font-size:10px; color: black;"> <strong> Subtotal </strong> </label> <br>
					<label id = "<?php echo "sub".strval($i)?>" name = "subtot" style="font-family:'Nunito'; font-size:10px; color: #FC4C02;" value = "<?php ((($row->harga)*15000)*$row->quantity)?>"> <strong> <?php $harga = ((($row->harga)*15000)*$row->quantity); echo "Rp ". number_format($harga, 0, ".", ".")."<br />"; ?> </strong> </label>
					</div>
				</div>
			</div>
			</div>
			<hr style = "height:0.1px;"> <!-------------------------------- garis paling bawah ----------------------------------->
				<?php $i++;
			} ?>

			</div>

			<div id = "null" class = "card border-0" style = "width: 20px; background-color:#F7F7F7;"> </div>
			
			<!-- Box Harga-->
			<div id = "display_harga" class = "card" style = "width: 240px; height: 180px;">
	            <div class="text-center d-flex-column">
					<?php 
					$query1 = "SELECT SUM(quantity*harga) AS total FROM pesanan WHERE username ='".$username."'";
					$result1 = $db->query($query1);
					$row = $result1->fetch_object()
					?>
                    <?php $query2 = "SELECT * FROM pesanan WHERE username='".$username."'";
					$result2 = $db->query($query2);
					$row2 = $result2->fetch_object() ?>
					<label class="mt-2" style="font-family:'Nunito';font-size:12px;color:black;"> <strong> TOTAL PRICE </strong> </label> <br> <br>
					<label id = "totharga" class="mt-2" style="font-family:'Nunito';font-size:23px;color:#FC4C02;"> <strong> <?php $harga2 = $row->total*15000; echo "Rp ". number_format($harga2, 0, ".", ".")."<br />"; ?> </strong> </label> <br> <br>
					<a style="text-decoration: none;" href="checkout.php?id_pesanan=<?php echo $row2->id_pesanan?>"><button style = "width: 80px; border-radius: 8px; background-color:#FC4C02; color: white;"> Checkout </button></a>
				</div>
			</div>
		</div>
		</div>
		<br> <br>
	</div>
	
    <footer><?php include 'footer.php';?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
    
</html>



