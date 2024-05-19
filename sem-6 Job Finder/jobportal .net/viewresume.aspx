<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="viewresume.aspx.cs" Inherits="viewresume" Title="View Resume" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<div id="main">
			<div class="container" style="margin-left: 230px">
<table>
    <tr><td colspan="2">
<asp:GridView ID="GridView1" runat="server" CellPadding="4" ForeColor="#333333" 
        GridLines="None" DataKeyNames="cart_id" EmptyDataText="No Data Found" 
        Width="727px" AutoGenerateColumns="False">
        <RowStyle BackColor="#FFFBD6" ForeColor="#333333" />
        <FooterStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <PagerStyle BackColor="#FFCC66" ForeColor="#333333" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
        <HeaderStyle BackColor="#333333" Font-Bold="True" ForeColor="green" />
        <AlternatingRowStyle BackColor="black" />
         <Columns>
             <asp:TemplateField HeaderText="p_id"><ItemTemplate><asp:Label ID="Label1" runat="server" Text='<%# Eval("p_id") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_nm"><ItemTemplate><asp:Label ID="Label2" runat="server" Text='<%# Eval("p_nm") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_img"><ItemTemplate><asp:Image ID="Image1" runat="server" height="100" Width="100" ImageUrl='<%# Eval("p_img") %>'/></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_sal"><ItemTemplate><asp:Label ID="Label3" runat="server" Text='<%# Eval("p_sal") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             
             <asp:TemplateField HeaderText="Edit"><ItemTemplate><asp:HyperLink ID="hpflat" runat="server" NavigateUrl='<%# "~/editresume.aspx?id=" + Eval("resume_id")  %>' ImageUrl="~/img/edit.jpg">Edit</asp:HyperLink></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="Delete"><ItemTemplate><asp:ImageButton ID="imgdeltmp" runat="server" ImageUrl="~/img/delete.gif" OnClick="imgdeltmp_Click" OnClientClick="return confirm('Are you sure to delete?')" AlternateText="Delete"/></ItemTemplate></asp:TemplateField>
        </Columns>
    </asp:GridView></td></tr><br /><br />
    
    
       
        <br />
       
       
        <td align="center"><asp:Label ID="lbltotal" runat="server" Font-Bold="True" Font-Size="Large"></asp:Label></td></tr>
     
    <tr><td colspan="2" align="center"><br /><asp:Button ID="btn_apply" 
            runat="server" Text="Apply" onclick="btn_apply_Click" Font-Bold="True" 
            Font-Size="15pt" Height="34px" Width="111px" /><br /></td></tr>
    </table>
    </div>
    </div>

</asp:Content>

