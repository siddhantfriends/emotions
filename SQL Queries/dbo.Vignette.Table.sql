USE [emotions]
GO
/****** Object:  Table [dbo].[Vignette]    Script Date: 12/06/2016 18:09:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Vignette](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Content] [varchar](1000) NOT NULL,
	[type] [varchar](7) NOT NULL
)

GO
SET ANSI_PADDING OFF
GO
