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
    public partial class Estoque : Form
    {
        Thread nt;
        public Estoque()
        {
            InitializeComponent();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            if (num.Text == "1")
            {
                pos.Text = "4";
                est.Text = "2";
                forn.Text = "Calças LTDA";
                prod.Text = "Calça";
                dev.Text = "Cintura alta";
                qua.Text = "6";
                des.Text = "Rasgado no joelho";
                uc.Text = "32";
            }
            else
            {
                MessageBox.Show("Produto não se encontra em estoque!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
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
