<?php




/** LOGIN **/

Route::get('/', 'LoginController@login')->name('login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout')->name('logout');


Route::group(['middleware' => 'LoginMiddleware', 'middleware' => ['login']], function() {

    Route::get('/welcome', 'LoginController@bemvindo')->name('principal');
        //Cadastros
    Route::get('/cadastrousuario', 'CadastroController@cadastrousuario')->name('cadusuario');
    Route::get('/cadastrofunc', 'UserController@cfunc')->name('cadfunc');

    //Puxando view lista de cargos
    Route::get('/cargo', 'UserController@cargo')->name('cargo');


    Route::get('/cadastrorealizado', 'UserController@cadfuncok')->name('cadfuncok');

    Route::get('/alterarcargo', 'UserController@alterarcargo')->name('altcargo');
    Route::get('/alteracao', 'UserController@alteracao')->name('alt');

    //Sistema de Ponto
    Route::get('/registrarponto', 'PontoController@ponto')->name('contponto');
    Route::get('/saida', 'PontoController@telasaida')->name('saida');
    Route::get('/entrada', 'PontoController@telaentrada')->name('entrada');


    //Relatórios
    Route::get('/userrelatorios', 'UserController@relatorios')->name('userrelatorios');
    Route::get('/justificativa', 'UserController@just')->name('justificativa');

    //Funcionários 
    Route::get('/funcionarios', 'UserController@func')->name('listfunc');
    Route::get('/alterardados', 'UserController@alterar')->name('editdados');


    //Departamentos
    Route::get('/dpt', 'UserController@departamento')->name('departamentos');
    Route::get('/caddpt', 'UserController@criardpt')->name('criardpt');
    Route::get('/altdpt', 'UserController@altdepartamento')->name('alterardepartamento');
    Route::post('/salvardpt', 'UserController@salvardpt')->name('salvar.departamento');




    //
    Route::get('/cadcargo', 'UserController@cadcargo')->name('cadcargo');


    Route::post('/salvar', 'UserController@salvar')->name('salvar.cliente');
    Route::post('/salvarcargo', 'UserController@salvarcargo')->name('salvar.cargo');
});