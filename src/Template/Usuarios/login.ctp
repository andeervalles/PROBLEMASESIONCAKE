<div id="loginbox" style="margin-top:50px;" class="mainbox col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 co col-md-6 col-md-offset-3l-sm-offset-2">                    

    <div class="panel panel-info" >

        <div class="panel-heading">
            <div class="panel-title">Ingreso al Sistema</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

            <?= $this->Flash->render('auth') ?>

            <?= $this->Form->create(null, ['class' => 'form-horizontal']) ?>
                
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <?= $this->Form->text('nombres', ['class' => 'form-control', 'required' => true, 'placeholder' => 'username', 'autocomplete' => 'off']) ?>
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <?= $this->Form->password('password', ['class' => 'form-control', 'required' => true, 'placeholder' => 'password']) ?>
                </div>

                <div style="margin-top:10px" class="form-group">
                    <div class="col-sm-12 controls">
                        <?= $this->Form->submit('Ingresar', ['class' => 'btn btn-success']); ?>
                    </div>
                </div>

            <?=$this->Form->end()?>    

        </div>                     
    </div>  
</div>