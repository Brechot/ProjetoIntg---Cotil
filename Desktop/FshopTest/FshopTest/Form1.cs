using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Threading;
using MySql.Data.MySqlClient;

namespace FshopTest
{
    public partial class Form1 : Form
    {
        Thread nt;
        public Form1()
        {
            InitializeComponent();

            if (Dao_conexao.GetConexao ("143.106.241.3", "cl200469", "cl200469", "cl*10082000"))
                Console.WriteLine("Conectado");
            else
                Console.WriteLine("Erro de conexão");
        }

        private void formMenu()
        {
            Application.Run(new Menu());
        }

        private void btnEntrar_Click(object sender, EventArgs e)
        {
            // if(tbLogin.Text=="Henrique" && tbSenha.Text == "1234")
            //{
            //   this.Close();
            // nt = new Thread(formMenu);
            // nt.SetApartmentState(ApartmentState.STA);
            // nt.Start();
            //}
            //else
            int tipo = Dao_conexao.Login(tbLogin.Text, tbSenha.Text);
            if (tipo == 0)
            {
                MessageBox.Show("Login ou Senha inválidos!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

            if (tipo == 1)
            {
                // groupBox1.Visible = false;
                // menuStrip1.Visible = true;
                // menuStrip1.Enabled = true;
                this.Close();
                nt = new Thread(formMenu);
                nt.SetApartmentState(ApartmentState.STA);
                nt.Start();
                //var menu = new Menu();
                //this.Hide();
                //menu.Show();
            }

            if (tipo == 2)
            {

                // groupBox1.Visible = false;
                // menuStrip1.Visible = true;
                // menuStrip1.Enabled = true;
                
            }
        }
    }
}
