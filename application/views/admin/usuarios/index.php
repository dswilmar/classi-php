<div class="main-wrapper main-wrapper-1">      
    <?php $this->load->view('admin/layout/navbar'); ?>
    <?php $this->load->view('admin/layout/sidebar'); ?>
    
    <!-- Main Content -->
    <div class="main-content">
    	<section class="section">
        	<div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $titulo ?></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped data-table">
                        <thead>
                          <tr>
                            <th class="nosort">Imagem</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Perfil de Acesso</th>
                            <th>Ativo</th>                            
                            <th class="nosort">Opções</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($usuarios as $usuario): ?>
                          <tr>
                            <td>
                              <img alt="image" src="<?php echo base_url('uploads/usuarios/') . $usuario->img ?>" width="35">
                            </td>
                            <td><?php echo $usuario->first_name . ' ' . $usuario->last_name ?></td>
                            <td><?php echo $usuario->email ?></td>
                            <td><?php echo $this->ion_auth->is_admin($usuario->id) ? 'Admin' : 'Anunciante' ?></td>
                            <td>
                              <?php if ($usuario->active == 1) : ?>
                                <div class="badge badge-success badge-shadow">Sim</div>
                              <?php else: ?>
                                <div class="badge badge-danger badge-shadow">Não</div>
                              <?php endif ?>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">
                                <i class="fa fa-edit"></i>
                              </a>
                              <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Excluir">
                                <i class="fa fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          	</div>
        </section>
    </div>      