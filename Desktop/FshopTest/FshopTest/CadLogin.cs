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
    public partial class CadLogin : Form
    {
        public CadLogin()
        {
            InitializeComponent();
        }

        private void btnCad_Click(object sender, EventArgs e)
        {
            int tipo = 0;
            if (cbxType.SelectedIndex == 0)
                tipo = 0;
            else if (cbxType.SelectedIndex == 1)
                tipo = 1;


            if (Dao_conexao.CadLogin(txtUser.Text, txtPass.Text, tipo))
                MessageBox.Show("Cadastro realizado com sucesso");
            else
                MessageBox.Show("Erro de Cadastro!");
        }
    }
}
