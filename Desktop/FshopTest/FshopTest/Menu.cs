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
    public partial class Menu : Form
    {
        Thread nt1;
        public Menu()
        {
            InitializeComponent();
        }

        private void clientesToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
            nt1 = new Thread(formCliente);
            nt1.SetApartmentState(ApartmentState.STA);
            nt1.Start();

        }

        private void formCliente()
        {
            Application.Run(new Cliente());
        }

        private void fornecedoresToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
            nt1 = new Thread(formFornecedores);
            nt1.SetApartmentState(ApartmentState.STA);
            nt1.Start();
        }

        private void formFornecedores()
        {
            Application.Run(new Fornecedores());
        }

        private void funcionáriosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            this.Close();
            nt1 = new Thread(formFuncionario);
            nt1.SetApartmentState(ApartmentState.STA);
            nt1.Start();
        }

        private void formFuncionario()
        {
            Application.Run(new Funcionario());
        }
    }
}
