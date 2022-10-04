using System;
using MySql.Data.MySqlClient;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace FshopTest
{
    internal class ClienteClasse
    {
        private String nome, endereco, bairro, estado, municipio, email, sexo;
        private String rg, cep, contato, numero;

        public ClienteClasse(string nome, string endereco, string bairro, string estado, string municipio, string email, string sexo, string rg, string cep, string contato, string numero)
        {
            this.nome = nome;
            this.endereco = endereco;
            this.bairro = bairro;
            this.estado = estado;
            this.municipio = municipio;
            this.email = email;
            this.sexo = sexo;
            this.rg = rg;
            this.cep = cep;
            this.contato = contato;
            this.numero = numero;
        }

        public string Nome { get => nome; set => nome = value; }
        public string Endereco { get => endereco; set => endereco = value; }
        public string Bairro { get => bairro; set => bairro = value; }
        public string Estado { get => estado; set => estado = value; }
        public string Municipio { get => municipio; set => municipio = value; }
        public string Email { get => email; set => email = value; }
        public string Sexo { get => sexo; set => sexo = value; }
        public string Rg { get => rg; set => rg = value; }
        public string Cep { get => cep; set => cep = value; }
        public string Contato { get => contato; set => contato = value; }
        public string Numero { get => numero; set => numero = value; }


        public bool cadastrarCliente()
        {
            bool cad = false;
            try
            {
                Dao_conexao.con.Open();
                MySqlCommand insere = new MySqlCommand("insert into projintCliente (nome, endereco, bairro, estado, municipio, email, sexo, rg, cep, contato, numero,) values ('" + nome + "','" + endereco + "','" + bairro + "','" + estado + "','" + municipio + "','" + email + "','" + sexo + "'," + rg + "," + cep + "," + contato + ",'" + numero + "')", Dao_conexao.con);
                insere.ExecuteNonQuery();
                cad = true;
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.ToString());
            }
            finally
            {
                Dao_conexao.con.Close();
            }
            return cad;
        }
    }
}
