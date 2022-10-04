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
        public static MySqlConnection con;

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

        public static Boolean cadastrarCliente(String nome, String endereco, String bairro, String estado, String municipio, String email, String sexo, String rg, String cep, String contato, String numero)
        {
            bool cad = false;

            try
            {
                con.Open();
                MySqlCommand insere = new MySqlCommand("INSERT INTO projintCliente (nome, endereco, bairro, estado, municipio, email, sexo, rg, cep, contato, numero) VALUES ('" + nome + "','" + endereco + "','" + estado + "', '" + municipio + "','" + email + "','" + sexo + "'," + rg + "," + cep + "," + contato + "," + numero + ")", con);
                insere.ExecuteNonQuery();
                cad = true;
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.ToString());
            }
            finally
            {
                con.Close();
            }
            return cad;

        }    

    }
}
