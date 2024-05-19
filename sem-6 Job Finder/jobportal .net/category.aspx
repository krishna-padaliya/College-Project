<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="category.aspx.cs" Inherits="category" Title="Category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div id="main">
			<div class="container" style="margin-left: 100px">
			  <asp:Repeater ID="Repeater1" runat="server" >
   <HeaderTemplate>
   <!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
			  
   </br></br></br></br></br></br><asp:Label ID="menu"  runat="server" Text="JOBS" style="margin-left: 200px"  Font-Bold="true" Font-Size="50pt">
   </asp:Label><br /><br /></br>
   
    </HeaderTemplate>
    <ItemTemplate><br />
    <div class="row" style="margin-left: 200px">
    <div class="3u">
						<section>
   
    <asp:Image  ID="img" runat="server" ImageUrl='<%#Eval("c_img")%>' Height="300" Width="300" style="margin-bottom:100" >
    </asp:Image><br /><br /></section></div>
   
   
						
     <div class="3u" style="margin-left:50px; margin-top:150px"  >
     
						<section>
    <asp:HyperLink ID="hpdetail" ForeColor=Black style="margin-left: 100px" runat="server"  NavigateUrl='<%# "~/product.aspx?id = " + Eval("c_id") %>' Text='<%#Eval("c_nm")%>' Font-Bold=true Font-Size=25pt  >   </asp:HyperLink></section></div>
   
   <%-- <td>
    <asp:Label ID="Label2" runat="server" Text='<%#Eval("c_nm")%>'></asp:Label></td>--%></div>
   
    
     
     </ItemTemplate>
     
     <FooterTemplate >
     </table>
     </FooterTemplate>
    </asp:Repeater>
    </div>
    </div>

</asp:Content>

