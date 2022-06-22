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
    public partial class Histórico : Form
    {
        Thread nt;
        public Histórico()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (solicitacao.Text == "1")
            {
                cnpj.Text = "12345678000101";
                empresa.Text = "Camisas LTDA";
                produto.Text = "Camisa Listrada";
                derivacao.Text = "Gola V";
                quantidade.Text = "10";
                descricao.Text = "Produto Novo";
                usuario.Text = "34";
            }
            else
            {
                MessageBox.Show("Solicitação inexistente!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
            nt = new Thread(formMenu);
            nt.SetApartmentState(ApartmentState.STA);
            nt.Start();
        }

        private void formMenu()
        {
            Application.Run(new Menu());
        }
    }
}
