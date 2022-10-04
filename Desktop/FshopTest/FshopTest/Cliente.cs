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
    public partial class Cliente : Form
    {
        Thread nt1;
        public Cliente()
        {
            InitializeComponent();
        }

        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
            nt1 = new Thread(formMenu);
            nt1.SetApartmentState(ApartmentState.STA);
            nt1.Start();
        }

        private void formMenu()
        {
            Application.Run(new Menu());
        }

        private void button1_Click(object sender, EventArgs e)
        {
            

            ClienteClasse cliente = new ClienteClasse(txtNome.Text, txtEndereco.Text, txtBairro.Text, txtEstado.Text, txtMunicipio.Text, txtEmail.Text, radioButton1.Text, txtRg.Text, txtCep.Text, txtContato.Text, txtNumero.Text); ;
            if (cliente.cadastrarCliente())
                MessageBox.Show("Cadastro salvo com sucesso!", "Salvo!", MessageBoxButtons.OK, MessageBoxIcon.Information);
            else
                MessageBox.Show("Erro de cadastro!", "Erro!", MessageBoxButtons.OK, MessageBoxIcon.Error) ;
            
        }
    }
}
