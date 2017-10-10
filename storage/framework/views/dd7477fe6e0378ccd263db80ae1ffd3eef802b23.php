<!DOCTYPE html>
<html>
    <head>
        <title>User Mail</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="app">
        <div class="container">
            <div class="content">
                <h1>Inbox</h1>
            </div>




                  <table class="table table-hover">
                            <tr>
                              <th>ID</th>
                              <th>Naam</th>
                              <th>Onderwerp</th>
                              <th>Bericht</th>
                            </tr>
                            <?php $__currentLoopData = $Mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><a href="<?php echo e(url('show', $value->id)); ?>" class="btn btn-info btn-sm"><?php echo e($value->id); ?></td>
                              <td><?php echo e($value->user); ?></td>
                              <td><?php echo e($value->onderwerp); ?></td>
                              <td><button type="button" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#Bericht">Lees het bericht</button>
                                <div id="Bericht" class="collapse">
                                <h2></h2>
                                </div>
                              </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </table>




                          <h2>Schrijf een Mail</h2>
                          <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Maak een Email</button>


                          <!-- DIT IS DE MODAL OM TE EMAIL TE LEZEN!!!!!!! -->
              <div class="modal fade" id="readModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><?php echo e($value->id); ?></h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                      <input type="submit" value="Submit" class="submit-button">
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
                          <!-- DIT IS HET EINDE VAN DE LEZEN MODAL!!!!!!! -->




                          <!-- DIT IS DE MODAL OM EEN EMAIL TE SCHRIJVEN!!!!!! -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Schrijf een mail</h4>
                    </div>
                    <div class="modal-body">
                      <div class="inbox">
                        <form action="<?php echo e(url('postmailInsert')); ?>" method="POST">
                           <?php echo e(csrf_field()); ?>

                              <table class="table">
                                  <tr>
                                      <td>E-mailadres:</td>
                                      <td><input type="email" name="user" id="user"></td>
                                  </tr>
                                  <tr>
                                    <td>Onderwerp:</td>
                                    <td><input type="text" name="onderwerp" id="onderwerp"></td>
                                  </tr>
                                  <tr>
                                      <td>Bericht:</td>
                                      <td><textarea rows="15" cols="100" name="message" id="message" class="message"></textarea></td>
                                  </tr>
                              </table>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" value="Submit" class="submit-button">
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
