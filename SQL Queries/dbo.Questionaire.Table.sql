USE [emotions]
GO
/****** Object:  Table [dbo].[Questionaire]    Script Date: 12/06/2016 18:09:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Questionaire](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Question] [varchar](500) NOT NULL,
	[Type] [varchar](30) NOT NULL,
 CONSTRAINT [PK_Questionaire] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)

GO
SET ANSI_PADDING OFF
GO
