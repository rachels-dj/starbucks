<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />	
	<title>WEB CAFE</title>
	
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/sub.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/join.css" />	
	
	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    
    
</head>
<body>

    <? include_once("header.php"); ?>
    
    <div class="navi">
        <span><img src="images/home.png" alt="홈" /></span>
        <img src="images/nav_r.png" alt=""/>
        <span>LOGIN</span>
        <img src="images/nav_r.png" alt=""/>
        <span class="last_navi">회원가입</span> 
    </div>     
   
            <div class="join">
                <div class="joinInfo">
                    <ul>
                        <li>가입된 회원정보는 나의메뉴 > 회원정보변경에서 수정가능합니다.</li>
                        <li><span>*</span>필수입력 사항입니다.</li>
                    </ul>
                </div>
                <table borber="0" cellpadding="0" cellspacing="0">
                    <colgroup>
                        <col style="width: 140px">
                    </colgroup>
                    <tr>
                        <th>이름<span> *</span></th>
                        <td>
                            <input type="text" class="normal" >
                        </td>
                    </tr>
                    <tr>
                        <th>아이디<span> *</span></th>
                        <td>
                            <input type="text" class="normal" >
                            <button class="shortbtn">중복확인</button>
                        </td>
                    </tr>
                    <tr>
                        <th>비밀번호<span> *</span></th>
                        <td>
                            <input type="password" class="normal pw" id="pw" >
                        </td>
                    </tr>
                    <tr>
                        <th>비밀번호확인<span> *</span></th>
                        <td>
                            <input type="password" class="normal checkpw" id="pw" >
                            <div class="pwInfo"><img src=images/excalm.png width="18px" height="18px" /><span class="info"> 입력하신 비밀번호와 일치하지 않습니다.</span></div>
                        </td>
                    </tr>
                    <tr>
                        <th>주소</th>
                        <td>
                            <input type="text" readonly="readonly" class="small"> - <input type="text" readonly="readonly" class="small">
                            <button class="longbtn">우편번호 찾기</button><br />
                            <input type="text" class="big" value="상세주소입력">
                        </td>
                    </tr>
                    <tr>
                        <th>휴대폰<span> *</span></th>
                        <td>
                            <select>
                                <option>010</option>
                                <option>011</option>
                                <option>017</option>
                                <option>018</option>
                                <option>019</option>
                            </select> - <input type="text" class="small"> - <input type="text" class="small">
                            <br />
                            <input type="checkbox" class="check"><label> 이벤트/공지사항 등 문자수신동의를 원하시면 체크해주세요.</label>
                        </td>
                    </tr>
                    <tr>
                        <th>이메일</th>
                        <td>
                            <input type="email"> @ <input type="email" class="normal">
                            <select>
                                <option>메일주소를 선택하세요</option>
                                <option>nate.com</option>
                                <option>naver.com</option>
                                <option>hanmail.net</option>
                                <option>hotmail.com</option>
                                <option>gamil.com</option>
                                <option>yahoo.co.kr</option>
                                <option>paran.com</option>
                                <option>dreamwiz.com</option>
                                <option>freechal.com</option>
                                <option>lycos.co.kr</option>
                                <option>korea.com</option>
                                <option>hanmir.com</option>
                            </select>
                            <br />
                            <input type="checkbox" class="check"><label> 이메일 수신동의를 원하시면 체크해주세요.</label>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="jointext">
                <h3>이용약관</h3>        
                <div class="accessTerms">
                   <div>
                        <h1>제1장 총칙 제1조 (목적)</h1>
                        <br />
                        <p>웹카페에서 운영하는 인터넷 홈페이지에서 제공하는 인터넷 관련
                            서비스(이하 &quot;서비스&quot;라 합니다)의 이용에 관한 사항을 규정함을 목적으로 합니다.</p>
                        <br />
                        <h2>제2조 (정의)</h2>
                        <ol>
                            <li>1. 이용자(회원) : 인터넷 홈페이지에 로그인하여 본 약관에 따라 웹카페가 제공하는 서비스를 받는 자를
                                말합니다.</li>
                            <!-- li>2. 운영자 : 서비스의 전반적인 관리와 원활한 운영을 위하여 병원에서 선정한 사람</li -->
                            <!-- 20160120 삭제 -->
                            <li>2. 연결사이트 : 홈페이지와 하이퍼링크 방식(하이퍼링크의 대상에는 문자, 정지 및 동화상 등이 포함됨)
                                등으로 연결된 웹 사이트를 말합니다.</li>
                            <li>3. 개인정보 : 당해 정보에 포함되어 있는 성명, ID 등의 사항에 의하여 특정 개인을 식별할
                                수 있는 정보(당해 정보만으로는 특정 개인을 인식할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을
                                포함한다)를 말합니다.</li>
                            <!-- li>5. 해지 : 이용자가 서비스 개통 후 이용계약을 해약하는 것 </li -->
                            <!-- 20160120 삭제 -->
                        </ol>

                        <h2>제3조 (약관의 게시 및 변경)</h2>
                        <ol>
                            <li>1. 웹카페는 본 약관의 내용과 상호, 병원 소재지, 전자우편 주소 등을 이용자가 알 수 있도록 홈페이지에
                                게시합니다.</li>
                            <li>2. 웹카페는 불가피한 사정이 있는 경우 관계법령을 위배하지 않는 범위에서 본 약관을 개정할 수 있습니다.</li>
                            <li>3. 웹카페는 약관을 개정할 경우에는 전항과 같은 방법으로 공지 또는 통보함으로써 효력을 발생합니다.</li>
                            <li>4. 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 관계법령 또는 상관례에 따릅니다.</li>
                        </ol>

                        <h2>제4조 (서비스의 내용 및 변경)</h2>
                        <ol>
                            <li>1. 웹카페는 다음의 서비스를 제공합니다.
                                <ol>
                                    <li>Ⅰ. 웹카페의 웹 공부를 위한 자료 안내</li>
                                    <li>Ⅱ. 웹카페의 추천 연결사이트를 통해 제공되는 각종 서비스</li>
                                    <li>Ⅲ. 웹카페의 이용자들에게 제공되는 게시판 서비스</li>
                                    <li>Ⅳ. 웹카페에서 제공하는 자료실 및 정보</li>
                                </ol></li>
                            <li>2. 웹카페는 불가피한 사정이 있는 경우 제공하는 서비스의 내용을 변경할 수 있으며, 이 경우 변경된
                                서비스의 내용 및 제공일자를 명시하여 홈페이지에 게시하거나 기타의 방법으로 이용자에게 통보합니다.</li>
                            <li>3. 웹카페는 서비스 내용의 변경으로 인하여 이용자가 입은 손해에 대하여 배상하지 아니합니다. 단, 웹카페의
                                고의 또는 중과실이 있는 경우에는 그러하지 아니합니다.</li>
                        </ol>

                        <h2>제5조 (서비스의 중단)</h2>
                        <ol>
                            <li>1. 웹카페는 시스템 등 장치의 보수점검·교체 및 고장, 통신의 두절, 기타 불가항력적 사유가 발생한
                                경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.</li>
                            <li>2. 웹카페는 제1항의 사유로 서비스 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에
                                대하여는 배상하지 아니합니다. 단, 웹카페의 고의 또는 중과실이 있는 경우에는 그러하지 아니합니다.</li>
                        </ol>

                        <h1>제2장 회원의 가입 및 탈퇴</h1>

                        <h2>제6조 (회원가입)</h2>
                        <ol>
                            <li>1. 이용자는 웹카페가 정한 양식에 따라 회원정보를 기입한 후 본 약관에 동의한다는 의사표시를 함으로써
                                회원가입을 신청합니다.</li>
                            <li>2. 웹카페는 전항과 같이 회원으로 가입할 것을 신청한 이용자 중 이하 각호에 해당하지 않는 한 회원으로
                                등록합니다.
                                <ol>
                                    <li>Ⅰ. 가입신청자가 본 약관 제7조 제2항에 의거하여 이전에 회원 자격을 상실한 적이 있는 경우</li>
                                    <li>Ⅱ. 등록내용에 허위, 기재누락, 오기가 있는 경우</li>
                                    <li>Ⅲ. 기타 회원으로 등록하는 것이 병원의 기술상 또는 업무 수행상 현저히 지장이 있다고 판단하는 경우</li>
                                    <li>Ⅳ. 입력한 비밀번호가 10~20자 길이로, 영문 숫자 혼용이 아닌 경우</li>
                                </ol></li>
                            <li>3. 회원가입계약의 성립시기는 웹카페가 승낙한 시점으로 합니다.</li>
                            <li>4. 회원은 등록사항에 변경이 있는 경우, 즉시 전자우편 또는 기타 방법으로 병원에 그 변경사항을 알려야
                                합니다.</li>
                        </ol>

                        <h2>제7조 (회원 탈퇴 및 자격의 상실등)</h2>
                        <ol>
                            <li>1. 회원은 웹카페에 언제든지 탈퇴를 요청할 수 있으며 웹카페는 즉시 회원탈퇴를 처리합니다. 단, 탈퇴의
                                요청은 홈페이지 또는 전화로 하여야 하며, 요청하는 자의 이름, 전화번호, 탈퇴사유등을 기재하여야 합니다.</li>
                            <li>2. 회원이 다음 각호의 사유에 해당하는 경우, 웹카페는 회원자격을 상실시킬 수 있습니다.
                                <ol>
                                    <li>Ⅰ. 등록 신청 시에 허위 내용을 등록한 경우</li>
                                    <li>Ⅱ. 다른 사람의 서비스 이용을 방해하거나 그 정보를 도용하는 등 질서를 위협하는 경우</li>
                                    <li>Ⅲ. 본 약관을 위반한 경우</li>
                                    <li>Ⅳ. 기타 회원으로서의 자격을 지속시키는 것이 부적절하다고 판단되는 경우</li>
                                </ol>
                            </li>
                        </ol>

                        <h2>제8조 (회원에 대한 통지)</h2>
                        <ol>
                            <li>1. 웹카페는 회원에 대한 통지를 하는 경우, 회원이 병원에 제공한 전자우편 주소 또는 전화번호로 할 수
                                있습니다.</li>
                            <li>2. 웹카페는 불특정다수 회원에 대한 통지의 경우 게시판에 게시함으로써 개별통지에 갈음할 수 있습니다.</li>
                        </ol>

                        
                        <h1>제3장 개인정보의 보호</h1>

                        <h2>제9조 (개인정보의 수집)</h2>
                        <ol>
                            <li>1. 본 서비스의 원활한 활용을 위해 필요한 이용자의 개인정보를 수집할 수 있습니다. <!-- ol>
                                                    <li>Ⅰ. 성명</li>
                                                    <li>Ⅱ. 전화번호</li>
                                                    <li>Ⅲ. 비밀번호</li>
                                                    <li>Ⅳ. 전자우편 주소</li>
                                                </ol --></li>
                            <li>2. 이용자의 개인정보를 수집하는 때에는 이하 각호의 경우를 제외하고는 당해 이용자의 동의를 받습니다.
                                <ol>
                                    <li>Ⅰ. 법률에 특별한 규정이 있는 경우</li>
                                    <li>Ⅱ. 서비스이용계약의 이행을 위해서 필요한 경우</li>
                                    <li>Ⅲ. 서비스의 제공에 따른 요금정산을 위하여 필요한 경우</li>
                                </ol></li>
                            <li>3. 웹카페는 개인정보의 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 개인정보의 분실, 도난, 유출,
                                변조되지 아니하도록 안정성 확보에 필요한 기술적 조치 등을 강구합니다.</li>
                            <li>4. 웹카페는 개인정보의 수집목적을 달성한 때에는 당해 개인정보를 지체없이 파기합니다.</li>
                        </ol>

                        <h2>제10조(개인정보의 관리책임자)</h2>
                        <ol>
                            <li>• 개인정보관리책임자 : 정규하 담당</li>
                            <li>• 개인정보보호 실무담당자 : 박종환 팀장</li>
                            <li>• 소속부서 : 웹카페 정보보안팀</li>
                            <li>• 전화번호 : 02-3410-0370</li>
                            <li>• 이메일 : admin@webcafe.com</li>
                        </ol>

                        <h2>제11조(개인정보의 수집목적 및 이용목적)</h2>
                        <ol>
                            <li>1. 이용자에게 원활한 정보 제공을 위한 온라인 및 오프라인에서의 공지기능</li>
                            <li>2. 웹카페 홈페이지의 홈페이지 원활한 운영 및 통계분석자료로 활용</li>
                        </ol>

                        <h2>제12조(개인정보의 보유기간 및 이용기간)</h2>
                        <p>웹카페는 회원 자격을 가지고 있는 기간을 개인정보의 보유기간 및 이용기간으로 정합니다.</p>
                        <br />

                        <h2>제13조(개인정보의 이용 및 제공의 제한)</h2>
                        <ol>
                            <li>1. 제공된 개인정보는 당해 이용자의 동의없이 목적외 이용이나 제3자에게 제공할 수 없으며, 이에 따른
                                이용자의 피해에 대한 모든 책임은 병원이 집니다. 단, 다음의 경우에는 예외로 합니다.
                                <ol>
                                    <li>Ⅰ. 법률에 특별한 규정이 있는 경우</li>
                                    <li>Ⅱ. 서비스의 제공에 따른 요금정산 및 배송등을 위하여 필요한 경우</li>
                                    <li>Ⅲ. 통계작성·학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로
                                        제공하는 경우</li>
                                </ol></li>
                            <!--  li>2. 정보통신서비스제공자로부터 이용자의 개인정보를 제공받은 자는 당해 이용자의 동의가 있거나 다른 법률에 특별한 규정이 있는 경우를 제외하고는 개인정보를 제공받은 목적외의 용도로 이를 이용하거나 제3자에게 제공하여서는 안됩니다.</li -->
                        </ol>

                        <h2>제14조(이용자의 권리)</h2>
                        <ol>
                            <li>1. 이용자는 언제든지 제10조 제2항, 제15조 제1항 또는 동조 제2항의 규정에 의한 동의를 철회할 수
                                있습니다. 단, 철회의 의사표시는 웹카페 또는 웹카페로부터 정보를 제공받은 자에게 전자우편이 도달된 때로부터 유효합니다.</li>
                            <li>2. 이용자는 병원에게 자신의 개인정보에 대한 열람을 요구할 수 있으며, 자신의 개인정보에 오류가 있는
                                경우에는 그 정정을 요구할 수 있습니다.</li>
                            <li>3. 제1항 및 제2항에 의한 철회, 열람, 정정의 요구는 병원에 전자우편을 보내는 방식으로 하여야 하며,
                                병원은 전자우편이 도달된 후 지체없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 병원이
                                그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.</li>
                        </ol>
                   </div>
                </div>
                <div class="btnsWrap">
                    <p>약관에 동의하시면 회원가입을 누르세요.</p>
                    <button class="agree"><span>동의하고 회원가입하기</span></button>
                    <button href="index.php" class="disagree"><span>동의하지 않습니다</span></button>
                </div>
            </div>
        </div>
    </div>
    
    
    <? include_once("footer.php"); ?>
    
    
    

</body>
</html>