<?php
namespace Xin\Thrift\MonitorService;
/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


interface GithubIf {
  /**
   * @param string $username
   * @param string $token
   * @return bool
   */
  public function receivedEvents($username, $token);
  /**
   * @param string $committer
   * @param string $token
   * @return bool
   */
  public function commits($committer, $token);
  /**
   * @param string $committer
   * @param int $btime
   * @param int $etime
   * @return \Xin\Thrift\MonitorService\CommitsLog[]
   */
  public function commitsLog($committer, $btime, $etime);
}


