<?php
	include_once'connection/connection.php';
	
	function register($a=array()){
		$q="insert into user(name,uname,email,password) values('$a[name]','$a[uname]','$a[email]','$a[pass]')";
		$r=mysqli_query($q);
		if($r){
			echo "Data Inserted";
		}else{
			echo "Data not Inserted";
		}
	}
	function ask($a=array()){
		$q="insert into question(title,category,details) values('$a[questiontitle]','$a[category]','$a[questiondetails]')";
		
		$r=mysqli_query($q);
		if($r){
			echo "Data Inserted";
		}else{
			echo "Data not Inserted";
		}
	}
	function login($a=array()){
		$q="select * from user where uname='$a[uname]' and password='$a[pass]'";
		$r=mysqli_query($q);
		if($row=mysqli_fetch_array($r)){
			$_SESSION['id']=$row['id'];
			
		}else{
		    ?>
		    <script>window.alert("Username or password must be wrong");
		    </script>
			<?php
			header("Refresh:0");
		}
	}
	function answer($a=array()){
		$q="insert into answer(qid,answer,uid) values('$a[qid]','$a[ans]','$_SESSION[id]')";
		$r=mysqli_query($q);
		if($r){
			$sw="select * from question where id=".$a['qid'];
			$rt=mysqli_query($sw);
			if($row=mysqli_fetch_array($rt)){
				$count=$row['ans'];
				$count=$count+1;
				$query="update question set ans='$count' where id=".$a['qid'];
				$rot=mysqli_query($query);
				if($rot){
					echo "Data Inserted";
				}else{
					echo "Data not Inserted";
				}	
			}
		}else{
			echo "Data not Inserted";
		}
	}
	
	function getQues(){
		$q="select * from question order by id desc";
		$r=mysqli_query($q);
		while($row=mysqli_fetch_array($r)){
	?>
		<article class="question question-type-normal">
			
			<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
			<div class="question-inner">
				<div class="clearfix"></div>
				<p class="question-desc"><h4><?php echo $row['title'];?></h4><h5>[<?php echo $row['details'];?>]</h5><h6>(<?php echo $row['category'];?>)</h6></p>
				<span class="question-comment"><a href="work.php?id=<?php echo $row['id'];?>"><i class="icon-star"></i><?php echo $row['ans'];?> Answer(s)</a></span>
				<?php
					if($_SESSION['id']!=""){
				?>
				<span class="question-comment"><a href="javascript:;" class="getAns" onclick="getValue('<?php echo $row["id"]?>')" ><i class="icon-comment"></i>Give Answer</a></span>
				<form id="ansP_<?php echo $row['id'];?>" style="display:none;" method="post">
				<input type="hidden" name="qid" id="qid" value="<?php echo $row['id'];?>">
				<textarea id="ans" name="ans" required="true" placeholder="Enter text" cols="50" rows="8" style="width:auto;"></textarea>
				<input type="submit" name="sub" value="Submit Answer" class="color button small">
				</form>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</article>	
	<?php
		}
	}
	function PargetQues(){
		$d="";
		$q="select * from question where id=".$_SESSION['qid'];
		$r=mysqli_query($q);
		if($row=mysqli_fetch_array($r)){	
	?>
			<article class="question question-type-normal">
			
				<div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
				<div class="question-inner">
				<div class="clearfix"></div>
					<p class="question-desc"><h5><?php echo $row['details'];?></h5></p>
				</div>
			</article>
	<?php
		}
		$qw="select * from answer where qid='$_SESSION[qid]' order by id desc";
		
		$rr=mysqli_query($qw);
		while($ro=mysqli_fetch_array($rr)){
	?>
		<article class="question question-type-normal">
			
			<div class="question-inner">
				<div class="clearfix"></div>
				<span class="question-comment"><?php echo nl2br(htmlspecialchars($ro['answer']));?></span>
				<div class="clearfix"></div>
			</div>
		</article>	
	<?php				
		}
	}
	
?>