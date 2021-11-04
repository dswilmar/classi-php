<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Core_model extends CI_Model {

	public function get_all($tabela = null, $condicoes = null, limite = null)
	{
		if ($tabela && $this->db->table_exists($tabela)) {
			
			if (is_array($condicoes)) {
				$this->db->where($condicoes);
			}

			if ($limite) {
				$this->db->limit($limite);
			}

			$this->db->order_by(1, 'DESC');
			return $this->db->get($tabela)->result();
		} else {
			return false;
		}
	}

	public function get_by_id($tabela = null, $condicoes = null)
	{
		if ($tabela && $this->db->table_exists($tabela) && is_array($condicoes)) {
			
			$this->db->where($condicoes);
			$this->db->limit(1);			
			return $this->db->get($tabela)->row();
		} else {
			return false;
		}
	}

	public function insert($tabela = null, $dados = null, $ultimo_id = null) 
	{

		if ($tabela && $this->db->table_exists($tabela) && is_array($dados)) {
			$this->db->insert($tabela, $dados);

			if ($ultimo_id) {
				$this->session->set_user_data('last_id', $this->db->insert_id());
			}

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
			} else {
				$this->session->set_flashdata('erro', 'Não foi possível salvar os dados');
			}
		} else {
			return false;
		}
	}

	public function update($tabela = null, $dados = null, $condicoes = null)
	{
		if ($tabela && $this->db->table_exists($tabela) && is_array($dados) && is_array($condicoes)) {

			if ($this->db->update($tabela, $dados, $condicoes)) {
				$this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
			} else {
				$this->session->set_flashdata('erro', 'Não foi possível salvar os dados')
			}
		} else {
			return false;
		}
	}

	public function delete($tabela = null, $condicoes = null)
	{
		if ($tabela && $this->db->table_exists($tabela) && is_array($condicoes)) {

			if ($this->db->delete($tabela, $condicoes)) {
				$this->session->set_flashdata('sucesso', 'Registro excluído com sucesso');
			} else {
				$this->session->set_flashdata('erro', 'Não foi possível excluir o registro')
			}
		} else {
			return false;
		}
	}

	public function generate_unique_code($tabela = null, $tipo_codigo = null, $tamanho_codigo = null, $campo_procura = null)
	{
		do {
			$codigo = random_string($tipo_codigo, $tamanho_codigo);
			$this->db->where($campo_procura, $codigo);
			$this->db->from($tabela);
		} while ($this->db->count_all_results() > 0);
		return $codigo;
	}

	public function count_all_results($tabela = null, $condicoes = null)
	{
		if ($tabela && $this->db->table_exists($tabela)) {
			
			if (is_array($condicoes)) {
				$this->db->where($condicoes);
			}

			return $this->db->count_all_results($tabela);
		} else {
			return false;
		}
	}
}