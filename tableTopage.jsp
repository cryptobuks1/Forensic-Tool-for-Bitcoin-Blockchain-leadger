<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%

try{
			Class.forName("com.mysql.jdbc.Driver"); 
			java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/Bitcoin","root","pass"); 
			Statement st= con.createStatement(); 
			ResultSet rs=st.executeQuery("select * from details");

			int Sno=1, Inward=0, dInward=0, Out=0,dOut=0,Bal=0;
      		String Name="",Url="",Addr="";

			while(rs.next())
			{	
				Sno = rs.getInt("Sno");
				Name = rs.getString("Name");
				Url = rs.getString("Url");
				Addr = rs.getStrign("Addr");
				Inward = rs.getInt("Inward");
				dInward = rs.getInt("dInward");
				Outward = rs.getInt("Outward");
				dOutward = rs.getInt("dOutward");
				Bal = rs.getInt("Bal");

			 out.println(Sno+"[][][]"+Name+Url+Addr+Inward);	

			}//while 

}//try
}catch(SQLException se){
      //Handle errors for JDBC
      se.printStackTrace();
   System.out.println("Goodbye!");
}//end catch
%>