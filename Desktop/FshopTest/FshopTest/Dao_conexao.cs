using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FshopTest
{
    class Dao_conexao
    {
        private static MySqlConnection con;

        public static Boolean GetConexao(String local, String banco, String user, String senha)
        {
            Boolean retorno = false;
            try
            {
                con = new MySqlConnection("server=" + local + ";User ID=" + user + ";" + "database=" + banco + "; password=" + senha + "; SslMode = none");
                con.Open();
                retorno = true;
            }
            catch (Exception e)
            {
                Console.WriteLine(e.Message);
                con.Close();//ajustar
            }
            finally
            {
                con.Close();
            }
            return retorno;
        }

        public static int Login(String usuario, String senha)
        {
            int tipo = 0; //0 quando não encontra
            try
            {
                con.Open();
                MySqlCommand login = new MySqlCommand("Select * from projintLogin where user ='" + usuario + "' and password ='" + senha + "'", con);
                MySqlDataReader resultado = login.ExecuteReader();
                if (resultado.Read())
                {
                    tipo = Convert.ToInt32(resultado["type"].ToString());
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.ToString());
            }
            finally
            {
                con.Close();
            }
            return tipo;
        }

        public static int VerifLogin(String usuario)
        {
            int igual = 0; //0 quando não encontra
            try
            {
                con.Open();
                MySqlCommand login = new MySqlCommand("Select * from projintFuncionario where user ='" + usuario + "'", con);
                MySqlDataReader resultado = login.ExecuteReader();
                if (resultado.Read())
                {
                    igual = 1;
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.ToString());
            }
            finally
            {
                con.Close();
            }
            return igual;
        }

        public static string CadastrarCliente(int rg, String nome, int cep, Char sexo, String endereco, String bairro, int contato, int numero, String estado , String municipio, String email)
        {
            con.Open();
            MySqlCommand cadastracli = new MySqlCommand("Select * from projintLogin where user ='" + usuario + "' and password ='" + senha + "'", con);
        }      //INSERT INTO `cl200469`.`projintCliente` (`rg`, `nome`, `email`, `sexo`, `cep`, `numero`, `rua`, `cidade`, `estado`, `contato`) VALUES ('48940574842', 'Henrique', 'henrique@gmail.com', 'M', '13490009', '254', 'Vargas', 'Cordeirópolis', 'SP', '998401344');

    }
}
