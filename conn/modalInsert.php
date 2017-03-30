<?php

//print "<html>";

  //  print "<head>";
    // print "</head>";

      //print "<body>";


include 'create.php';

?>	

<div class="container">
     
                <div class="span10 offset1">
 
                   <div class="row">

                        <h3>Create a Customer</h3>

                    </div>
             
                    <form class="form-horizontal" action="conn/create.php" method="post">

                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">

                        <label class="control-label">Nome</label>

                        <div class="controls">

                            <input name="nome" type="text"  placeholder="Name" value="<?php echo !empty($nome)?$nome:'';?>">

                            <?php if (!empty($nomeError)): ?>

                                <span class="help-inline"><?php echo $nomeError;?></span>

                            <?php endif; ?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">

                        <label class="control-label">Email Address</label>

                        <div class="controls">

                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">

                            <?php if (!empty($emailError)): ?>

                                <span class="help-inline"><?php echo $emailError;?></span>

                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($senhaError)?'error':'';?>">

                        <label class="control-label">Senha</label>

                        <div class="controls">

                            <input name="senha" type="password"  placeholder="*******" value="<?php echo !empty($senha)?$senha:'';?>">

                            <?php if (!empty($senhaError)): ?>

                                <span class="help-inline"><?php echo $senhaError;?></span>

                            <?php endif;?>
                        </div>
                      </div>

                      <div class="form-actions">

                          <button type="submit" class="btn btn-success">Create</button>

                        </div>
                    </form>
                </div>                 
    </div> 

 <?php  


//print "</body>";
//print "</html>";

?>


