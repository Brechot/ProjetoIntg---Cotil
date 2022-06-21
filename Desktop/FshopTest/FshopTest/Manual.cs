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
    public partial class Manual : Form
    {
        Thread nt;
        public Manual()
        {
            InitializeComponent();
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

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Solicitação enviada com sucesso! Ordem gerada XXX.XXX", "Enviado!", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }
    }
}
