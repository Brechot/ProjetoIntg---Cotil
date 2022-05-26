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

namespace FshopTest
{
    public partial class Form1 : Form
    {
        Thread nt;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if(tbLogin.Text=="Henrique" && tbSenha.Text == "1234")
            {
                this.Close();
                nt = new Thread(formMenu);
                nt.SetApartmentState(ApartmentState.STA);
                nt.Start();
            }
            else
            {
                MessageBox.Show("Login ou Senha inválidos!");
            }
        }

        private void formMenu()
        {
            Application.Run(new Menu());
        }
    }
}
