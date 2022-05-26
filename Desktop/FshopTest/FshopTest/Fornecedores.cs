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
    public partial class Fornecedores : Form
    {
        Thread nt1;
        public Fornecedores()
        {
            InitializeComponent();
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
    }
}
